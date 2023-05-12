/** Arquivo principal responsável pelas capturas de dados, validações e envio para a API 
 * 
 * author Cristiano Junior
*/

class Calculator {

    /** Função para adicionar máscaras, bloqueia letras */
    addMasks() {
        $('.metros').mask('00,00', { reverse: true })
        $('.unidades').mask('0')
    }

    checkFields(object) {
        return Object.values(object).every(value => value != '')
    }

    /** Função para capturar todos os campos do formulário e montar um objeto de forma automática
     * 
     * Assim caso tenha nescessidade de adicionar um campo novo no futuro não irá precisar mexer aqui
     */
    getPost() {
        var post = {};
      
        $(".custom-input").each(function (index, value) {
          const aux = value.name.split('-')
          var name = aux[0]
          var indice = aux[1]
      
          var wallKey = "wall-" + indice
      
          if (!post[wallKey]) {
            post[wallKey] = {}
          }
      
          post[wallKey][name] = parseFloat(value.value)
        });
      
        return post
      }

    /** Função necessária para fazer o envio da requisiçao para o back-end */
    async makePost(post) {
        return new Promise(function(resolve, reject) {
          $.ajax({
            url: '/api/paint',
            type: 'POST',
            dataType: 'json',
            data: post,
          }).done(function(response) {
            resolve(response);
          }).fail(function(jqXHR, textStatus, errorThrown) {
            reject(new Error('Erro na requisição: ' + textStatus + ' ' + errorThrown));
          });
        });
    }

}

export const CalculatorService = new Calculator