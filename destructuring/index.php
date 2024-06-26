<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    ,, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<script>
    class Cliente{
        #id = null;
        #nome = null;
        #data = null;
        #hora = null;
        #alteracao = null;
        #email = null;
        // constructor({id,nome,data,hora, alteracao,email}){ works ass well
        constructor({id,nome,data,hora, alteracao,email}={id,nome,data,hora, alteracao,email}){
            this.#id=id
            this.#nome=nome
            this.#data=data
            this.#hora=hora
            this.#alteracao=alteracao
            this.#email=email
        }
        getId(){
            return this.#id;
        }
        setId(id){
            this.#id=id;
            
        }
    }

    let obj = {id:'id123',nome:'nome456',data:'data789',hora:'dara',alteracao:'jeu',email:'email@email'}

    const newCliente = new Cliente(obj);
    console.log('newCliente')
    console.log(newCliente)
    console.log('newCliente.getId()')
    console.log(newCliente.getId())
    newCliente.setId('novoId')
    console.log(newCliente.getId())
    console.log(newCliente)

// 

</script>