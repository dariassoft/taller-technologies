import { bootstrapApplication } from '@angular/platform-browser';
import { provideHttpClient } from '@angular/common/http';
import { provideRouter, Routes } from '@angular/router';
import { AppComponent } from './app/app.component';
import { ProductListComponent } from './app/product-list/product-list.component';
import { ProductDetailsComponent } from './app/product-details/product-details.component';

const routes: Routes = [
  { path: '', component: ProductListComponent }, // Default route
  { path: 'product/:id', component: ProductDetailsComponent }, // Product details route
];

bootstrapApplication(AppComponent, {
  providers: [provideHttpClient(), provideRouter(routes)]
}).catch(err => console.error(err));
