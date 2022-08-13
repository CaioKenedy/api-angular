import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-curso',
  templateUrl: './curso.component.html',
  styleUrls: ['./curso.component.css'],
})
export class CursoComponent implements OnInit {
  nome: string = 'Caio';
  constructor() {}

  ngOnInit(): void {}

  //cadastrar
  cadastro(): void {
    alert('Cadastro');
  }

  //select
  selecao(): void {
    alert('Select');
  }

  //alterar
  alterar(): void {
    alert('Alterar');
  }

  //remove
  remover(): void {
    alert('Remover');
  }
}
