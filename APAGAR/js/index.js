import {
    ContatoEntity,
} from './Entities/Contato.js';


$(document).ready(()=>{
    Main.ContatoCreate();
})

class Main {
    static ContatoCreate(){
        let contatoCreate = new ContatoEntity();
        console.log(contatoCreate.getContatoId());
        let test = new MainTest();
        console.log(test.getContatoId());
    }

}


