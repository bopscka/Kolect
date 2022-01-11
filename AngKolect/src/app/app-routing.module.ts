import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HelpComponent } from './help/help.component';
import { HomeComponent } from './public/home/home.component';
import { LoginComponent } from './public/login/login.component';
import{ PublicComponent } from './public/public.component';
import { DashboardComponent } from './secure/dashboard/dashboard.component';
import { SecureComponent } from './secure/secure.component';
import { SidenavComponent } from './secure/sidenav/sidenav.component';

const routes: Routes = [
  {
    path:'', 
    component: PublicComponent,
    children: [
      {path:'', component:HomeComponent},
      {path:'login', component:LoginComponent}  
    ],
  },

  { path: 'Home',
    component: SecureComponent,
  },

  {path: 'help',component: HelpComponent}

  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
