import VueRouter from 'vue-router';

const routes = [
  {
    path: '/',
    component: require('./components/Index').default
  }
];

const router = new VueRouter({ routes });
export default router;