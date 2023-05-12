![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![LARAVEL](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) ![JAVASCRIPT](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E) ![JQUEY](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white) ![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS](https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white)

# Calculadora de Tintas

Code Challenge proposto pela empresa Digital Republic.

## Requisitos

1. PHP: Certifique-se de ter o PHP instalado na sua máquina. A versão deve ser 7.4 ou superior. Para verificar se o PHP está instalado, abra o terminal e execute o seguinte comando:

   ```shell
   php -v

2. Composer: Para verificar se o Composer está instalado, abra o terminal e execute o seguinte comando:

   ```shell
   composer --version
   ```

## Instalação

Siga as etapas abaixo para instalar e configurar o Sistema:

1. Faça o download ou clone o repositório do sistema para o seu ambiente local.

2. Abra o terminal e navegue até o diretório do sistema.

3. Execute o seguinte comando para instalar as dependências do projeto usando o Composer:

   ```shell
   composer install
   ```

4. Renomeie o arquivo `.env.example` para `.env` cpoie e cole essas configurações:

    ```
    APP_NAME=Calculadora
    APP_ENV=local
    APP_KEY=base64:aKUfGDM0smXyni6l0/wwkvjy7SLxlgSDredL+pukiEA=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_DEPRECATIONS_CHANNEL=null
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DISK=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=mailpit
    MAIL_PORT=1025
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"

    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_HOST=
    PUSHER_PORT=443
    PUSHER_SCHEME=https
    PUSHER_APP_CLUSTER=mt1

    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

    ```

## Executando a Aplicação

Para executar a aplicação, siga as etapas abaixo:

1. Abra o terminal e navegue até o diretório do sistema.

2. Execute o seguinte comando para iniciar o servidor local:

   ```shell
   php artisan serve
   ```

3. O servidor local será iniciado e você receberá a URL: `http://127.0.0.1:8000/`.

4. Abra o seu navegador e acesse a URL.

## Utilizando o Sistema

Após acessar o sistema no seu navegador, você poderá realizar os cálculos de tintas com base nas informações fornecidas. Siga as instruções na interface do sistema para inserir as dimensões das paredes, portas e janelas, e o sistema calculará a quantidade de tinta necessária.

# Utilizando o Sistema como API

É possível utilizar este sistema como uma API. basta seguir as instruções.

## URL da API

```
http://127.0.0.1:8000/api/paint
```

## Método

```
POST
```

## Cabeçalhos (Headers)

Certifique-se de incluir os seguintes cabeçalhos na sua solicitação:

- **Content-Type**: 'application/json'
- **Accept**: 'application/json'

## Corpo da solicitação (Body)

O corpo da solicitação deve ser um objeto JSON. Cada parede deve ser identificada por uma chave única, no formato `wall-{número}`. Os valores das propriedades para cada parede devem ser fornecidos conforme o exemplo abaixo:

```json
{
	"wall-1": {
		"width": 3,
		"height": 6,
		"doors": 1,
		"windows": 0
	},
	"wall-2": {
		"width": 2,
		"height": 3,
		"doors": 1,
		"windows": 1
	},
	"wall-3": {
		"width": 7,
		"height": 3,
		"doors": 1,
		"windows": 2
	},
	"wall-4": {
		"width": 4.3,
		"height": 3.1,
		"doors": 0,
		"windows": 0
	}
}
```

Cada parede deve ter as seguintes propriedades:

- **width**: A largura da parede em metros.
- **height**: A altura da parede em metros.
- **doors**: O número de portas na parede.
- **windows**: O número de janelas na parede.


## Exemplo de resposta

A resposta da API será um objeto JSON podendo ter o retorno com sucesso ou falha.

Falha:

```json
{
    "status": false,
    "message": "A área da parede deve estar entre 1 e 50 metros quadrados!"
}
```

Sucesso:

```json
{
    "status": true,
    "message": "Cálculo realizado com sucesso!",
    "data": {
        "18 L": 0,
        "3.6 L": 2,
        "2.5 L": 0,
        "0.5 L": 5
    }
}
```

## Conclusão

Agradeço pela oportunidade de criar este sistema. Me diverti muito no processo. Espero que gostem!
