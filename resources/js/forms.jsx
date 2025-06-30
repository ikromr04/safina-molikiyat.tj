import React from 'react';
import ReactDOM from 'react-dom/client';
import ContactForm from './contact-form';

const rootEl = document.getElementById('forms');
const root = ReactDOM.createRoot(rootEl);

root.render(
  <React.StrictMode>
    <ContactForm text={JSON.parse(rootEl.dataset.contactFormText)} />
  </React.StrictMode>
);
