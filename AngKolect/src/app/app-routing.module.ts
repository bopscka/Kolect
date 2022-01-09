import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { HelpComponent } from './help/help.component';
import { HomeComponent } from './public/home/home.component';
import { LoginComponent } from './public/login/login.component';
import{ PublicComponent } from './public/public.component';
import { SecureComponent } from './secure/secure.component';

const routes: Routes = [
  {
    path:'', 
    component: PublicComponent,
    children: [
      {path:'', component:HomeComponent},
      {path:'login', component:LoginComponent}  
    ]
  },

  {path: 'secure',component: SecureComponent},
  {path: 'help',component: HelpComponent},
  {path: 'dashboard',component: DashboardComponent}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
