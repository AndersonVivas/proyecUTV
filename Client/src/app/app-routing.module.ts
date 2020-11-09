import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { CreateServicesComponent } from './views/pages/services/create-services/create-services.component';
import { BaseComponent } from './views/theme/base/base.component';


const routes: Routes = [{
  path: '',
  component:BaseComponent ,
  children: [  
    {
      path: 'create-services',
      component:CreateServicesComponent,  
    },
  ]
}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
