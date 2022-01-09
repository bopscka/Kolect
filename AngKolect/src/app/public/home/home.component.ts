import { ResourceLoader } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: [
  './home.component.css',
  '../../../assets/dist/css/bootstrap.min.css',
  ]

})
export class HomeComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    this.loadScript('../../../assets/dist/js/bootstrap.bundle.min.js');
  }

  public loadScript(url: string) {
    const body = <HTMLDivElement> document.body;
    const script = document.createElement('script');
    script.innerHTML = '';
    script.src = url;
    script.async = false;
    script.defer = true;
    body.appendChild(script);
  }

}
