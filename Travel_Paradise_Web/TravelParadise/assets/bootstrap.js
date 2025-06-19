// import { startStimulusApp } from '@symfony/stimulus-bundle';

//const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
// assets/bootstrap.js
import { startStimulusApp } from '@symfony/stimulus-bridge';
import '@symfony/autoimport';

const app = startStimulusApp(require.context(
  './controllers',
  true,
  /\.(js|ts)$/
));
