import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ServicesDto } from 'src/app/core/models/servicesDto';

@Component({
  selector: 'app-create-services',
  templateUrl: './create-services.component.html',
  styleUrls: ['./create-services.component.scss']
})
export class CreateServicesComponent implements OnInit {

  servicesForm: FormGroup;
  servicesDto: ServicesDto = new ServicesDto();

  constructor(private productFB: FormBuilder) { }

  ngOnInit() {
    this.createForm();
  }

  createForm() {
    this.servicesForm = this.productFB.group({
      name: [this.servicesDto.name, Validators.compose([Validators.required])],
      description: [this.servicesDto.description, Validators.compose([])],
      status: [this.servicesDto.status, Validators.compose([Validators.required])],
      icon: [this.servicesDto.icon, Validators.compose([Validators.required])],
      linkServices: [this.servicesDto.linkServices, Validators.compose([Validators.required])],
      type: [this.servicesDto.type, Validators.compose([Validators.required])],
    });
  }
}
