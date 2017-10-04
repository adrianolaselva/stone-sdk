
## Componente de integração com API de Stone plataforma

Este Projeto tem por finalidade prover uma integração menos traumática e padronizada com as API's 
do Stone.

### Descrição

Para iniciar o uso os seguintes passos devem ser executados

* Passar atravéz das variáveis de ambiente, as seguintes devem ser preenchidas, não havendo mais a necessidade de passar o objeto "Integracao\Credenciamento\Stone\Client" como parâmetro.

```ini
[STONE_SDK]
STONE_HOST='https://affiliation-integration.stone.com.br'
STONE_USERID='B1A00B80-2514-4991-9EC9-07B8B230CBEB'
STONE_SECRETKEY='8A085D315DBB1F17DA64DE235D6F8BC493FE4B78'
```

```php
$client = new \Integracao\Credenciamento\Stone\Client();

* Passar como parâmetro no construtor em forma de array.

```php
$client = new \Integracao\Credenciamento\Stone\Client([
    StoneParameterConst::STONE_HOST => "http://...",
    StoneParameterConst::STONE_TIMEOUT => 10,
    StoneParameterConst::STONE_USERID => "",
    StoneParameterConst::STONE_SECRETKEY => "",
]);

$merchantApi = new MerchantApi($client);
```

* Passar como parâmetro a partir de uma instância do Client.

```php
$client = new \Integracao\Credenciamento\Stone\Client();

$client->setParameter(StoneParameterConst::STONE_HOST, "http://...");
$client->setParameter(StoneParameterConst::STONE_TIMEOUT, "");
$client->setParameter(StoneParameterConst::STONE_USERID, "");
$client->setParameter(StoneParameterConst::STONE_SECRETKEY, 10);

$merchantApi = new MerchantApi($client);
```

### Parâmetros

    StoneParameterConst::STONE_HOST => URL das apis da stone
    StoneParameterConst::STONE_TIMEOUT => Tempo de Timeout da requisição, como padrão o tempo é de 20 segundos
    StoneParameterConst::STONE_USERID => Usuário ID Stone
    StoneParameterConst::STONE_SECRETKEY => Secretkey Stone


Para obter a versão configure seu composer.json conforme exemplo abaixo:

```json
{
    "name": "ntkonline/stone-sdk",
    "authors": [
        {
            "name": "Adriano M. La Selva",
            "email": "adrianolaselva@gmail.com"
        }
    ],
    "require": {
        "ntkonline/stone-sdk": "0.1.*"
    },
    "repositories": [{
        "type": "vcs",
        "url": "git@bitbucket.org:ntkonline/stone-sdk.git"
    }],
	"prefer-stable" : true
}
```

Certifique-se que as configurações foram preenchidas corretamente executando os testes presentes no diretório "/vendor/ntkonline/stone-sdk/tests/*"

```sh
phpunit
```

[BitBucket]: <https://ntkdesenv@bitbucket.org/ntkdesenv/stone-sdk.git>