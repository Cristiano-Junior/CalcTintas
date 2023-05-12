/** Arquivo que utiliza a service 
 * 
 * author Cristiano Junior
*/

import { CalculatorService } from "/src/js/services/calculator.service.js";

CalculatorService.addMasks()

$('#calc').on('click', async () => {
    $('#showResult').html('');
    var post = CalculatorService.getPost()

    if (!CalculatorService.checkFields(post)) {
        const erro = 'Preencha todos os campos!'
        $('#showResult').html('<span class="error">' + erro + '</span>')
        throw new Error(erro)
    }

    var resp = ''

    await CalculatorService.makePost(post).then(function (result) {
        resp = result
    })
        .catch(function (error) {
            return alert(error(error));
        });

    if (!resp.status) {
        $('#showResult').html('<span class="error">' + resp.message + '</span>')
        throw new Error(resp.message)
    }

    var html = `
        <span class="success">${resp.message}</span><br>
        <span class="bold">Total da Área: ${resp.data.totalArea}</span><br>
    `;

    const arrayCans = resp.data.totalCans

    for (const key in arrayCans) {
        if (arrayCans.hasOwnProperty(key)) {
            const value = arrayCans[key];
            html += `<span>Total de latas de ${key}: ${value}</span><br>`
        }
    }

    $('#showResult').append(html);
})
