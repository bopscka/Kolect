import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  [x: string]: any;

  form: FormGroup;

  constructor(private  fb: FormBuilder, 
              private http: HttpClient, 
              private router: Router) {
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
      client_secret: 'u28UxGMloDtKhvBoKb9kJQF8FepvWRTrY2jJotqs',
      grant_type: "password",
      scope:'*',
    }

    this.http.post('http://localhost:8000/oauth/token',data).subscribe({

      next:(result:any) => {
        console.log("Requete effectue avec succes");
        console.log(result);
        localStorage.setItem('token', result.access_token);
        this.router.navigateByUrl('/secure');
        
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

