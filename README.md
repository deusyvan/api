# api
WebService Api de Tarefas
Exercicio de WebService

1° Commit = Criação do backend da aplicação tarefas

TIPOS DE LOGIN COM API's:
- Método tradicional (servidor com sessão) = Não recomendado para API's
- Chave de API = Muito utilizado (API Key) = No BD salva a chave
- Baseado em TOKEN = Similar ao API Key = (JWT = Json Web Token) condensamento 
  de dados hash baseado em token com várias informações
  
ANATOMIA DO JWT E COMO FUNCIONA:
    Diferença com relação ao API Key:
    *************************************************************************************************************************\n
    header.payload.signature
    header = Cabeçalho com tipo e codificação ENCRIPTY
        {
            "typ":"JWT",
            "alg":"HS256"
        }
    *************************************************************************************************************************\n
    *    Gera-se um código com BASE64 = EX: 1234567891011                                                                   *\n
    *************************************************************************************************************************\n
    payload = Informações opcionais e corpo do negócio Mais comuns:(ishoe, 
              expire: quando expira, quando foi criado = idade, hash unico)
        {
            //Peritos registrados
            "iss":"meusite.com.br"
            "exp":"123456789"
            "iat":"123456985"
            "jti":"1254878994gfg48ryw845454"
           //Dados do usuario Públicas
           "id_user":"123"
           //Identificação Privada
           "allsryiu":"sulaskjwyyo"
        }
    *************************************************************************************************************************
    *    Gera-se um código com BASE64 = EX: 12131415161718                                                                  *
    *************************************************************************************************************************
    signature = chave key de identificação Não tem JSON
     - base64(HEADER) . base64(PAYLOAD) . CHAVE SECRETA 256bit
     A chave secreta é guardada no servidor (Único) 
     Tudo é encriptografado em HS256
     HS256(base64(HEADER) . base64(PAYLOAD) . CHAVE SECRETA 256bit)          
    *************************************************************************************************************************
    *    Gera-se um código com BASE64 = EX: KJU18192012025tyeuwi528741                                                      *
    ************************************************************************************************************************* 
    JWT FINAL:
    *************************************************************************************************************************
    *    Junção de todos os códigos:                                                                                        *
    *    1234567891011.12131415161718.KJU18192012025tyeuwi528741                                                            *
    *************************************************************************************************************************
      
      
      Site para simular os dois lados:
      https://jwt.io
      
      
    
    
    
    
