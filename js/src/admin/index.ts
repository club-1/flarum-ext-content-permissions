import app from 'flarum/admin/app';

export { default as extend } from './extend';

app.initializers.add('club-1-content-permissions', () => {
  console.log('[club-1/flarum-ext-content-permissions] Hello, admin!');
});
