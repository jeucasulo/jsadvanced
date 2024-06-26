class ContatoEntity{
    constructor(form) {
        this.form = form;
    }
    #contatoId='123';
    #contatoNome;
    #telefones = [];
    getContatoId(){
        return this.#contatoId;
    }
}
export {
    ContatoEntity,
}
