import React from 'react';
import ReactDOM from 'react-dom/client';
import ContactForm from './contact-form';
import Calculation from './calculation';

const rootEl = document.getElementById('forms');
const root = ReactDOM.createRoot(rootEl);

root.render(
  <React.StrictMode>
    <ContactForm text={JSON.parse(rootEl.dataset.contactFormText)} />
    <Calculation text={JSON.parse(rootEl.dataset.contactFormText)} />
  </React.StrictMode>
);
