import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  form: FormGroup;

  constructor(private  fb: FormBuilder, private http: HttpClient) {
    this.form = this.fb.group({
      email: '',  
      password: ''
    });
  }

  submit(){
    console.log(this.form.getRawValue());
    
    const formData = this.form.getRawValue();

    const data = {
      username: formData.email,
      password: formData.password,
      client_id:2,
      client_secret: 'I76hLpjBkNIBfHHZjnXiCQm6PWzIETtaQWVWAU7h',
      grant_type: "password",
      scope:'*',
    }

    this.http.post('http://localhost:8000/oauth/token',data).subscribe({

      next:result => {
        console.log("Requete effectue avec succes");
        console.log(result);
      },

      error:error => {
        console.error("error");
        console.log(error);
      }

    }) ;
  }

  ngOnInit(){

  }

}

