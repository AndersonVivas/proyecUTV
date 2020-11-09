import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CreateServicesComponent } from './views/pages/services/create-services/create-services.component';
import { ShowServiceComponent } from './views/pages/services/show-service/show-service.component';
import { BaseComponent } from './views/theme/base/base.component';
import {MatTabsModule} from '@angular/material/tabs';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ReactiveFormsModule } from '@angular/forms';
@NgModule({
  declarations: [
    AppComponent,
    CreateServicesComponent,
    ShowServiceComponent,
    BaseComponent,
   
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MatTabsModule,
    BrowserAnimationsModule,
    ReactiveFormsModule,    
  ],
  providers: [ ],
  bootstrap: [AppComponent]
})
export class AppModule { }
