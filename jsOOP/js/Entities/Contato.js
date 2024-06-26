class ContatoEntity{
    constructor(patas) {
        this.patas = patas;
    }
    #contatoId='123';
    #contatoNome;
    #telefones = [];
    getContatoId(){
        return this.#contatoId;
    }
    setContatoId(contatoId){
        this.#contatoId = contatoId;
    }
    setTelefones(telefonesListId){
        telefoneObj =  telefonesListId;
        // looping
        // var telefone = new Telefone();
        // telefone.setTelefoneDdi('className.input.val');
        // this.#telefones.push(telefone);
        //
        
    }
}

class Telefone{
    constructor(){

    }
    #telefoneId;
    #telefoneDdi;
    #telefoneDdd;
    #telefoneTel;
    #telefonePref;
    #telefoneEmail;
    setTelefoneId(telefoneId){
        this.telefoneId = telefoneId;
    }
}

class ContatoCreateModalEntity extends ContatoEntity{
    
    constructor(patas,modalId) {
        super(patas);
        this.modal = modalId
    }

    latir() {
        console.log("Esse cachorro late!");
    }
    modalFn(){
        console.log('Ira criar um modal a partir do seguinte id:'+this.modal);
    }
}



// export default Contato;


export {
    ContatoEntity,
    ContatoCreateModalEntity
}
