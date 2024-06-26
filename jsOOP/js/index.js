// import ContatoEntity from "./Entities/Contato.js";
// import ContatoCreateEntity from "./Entities/Contato.js";

import {
    ContatoEntity,
    ContatoCreateModalEntity,
} from './Entities/Contato.js';





$(document).ready(()=>{
    Main.ContatoCreate();
    Main.Contato();
})


class Main {
    
    static ContatoCreate(){
        // OBJETO CACHORRO
        let concatoCreate = new ContatoCreateModalEntity('PATASSSS','modalDeEdicação');
        concatoCreate.latir();    // Esse concatoCreate late!
        concatoCreate.modalFn();    // Esse cachorro late!
        console.log('contatoId: ' + concatoCreate.getContatoId());    // Esse cachorro late!
        concatoCreate.setContatoId('novo id contato');
        console.log('contatoId: ' + concatoCreate.getContatoId());    // Esse cachorro late!
    }
    static Contato(){
        let concatoCreate = new ContatoEntity('PATASSSS');
        
    }
}


