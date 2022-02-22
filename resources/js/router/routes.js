function page(path) {
  return () =>
    import(/* webpackChunkName: '' */ `~/pages/${path}`).then(
      (m) => m.default || m
    );
}

export default [
  { path: "/", name: "welcome", redirect: { name: "homepage" } },

  { path: "/login", name: "login", component: page("auth/login.vue") },
  { path: "/register", name: "register", component: page("auth/register.vue") },
  {
    path: "/password/reset",
    name: "password.request",
    component: page("auth/password/email.vue"),
  },
  {
    path: "/password/reset/:token",
    name: "password.reset",
    component: page("auth/password/reset.vue"),
  },
  {
    path: "/email/verify/:id",
    name: "verification.verify",
    component: page("auth/verification/verify.vue"),
  },
  {
    path: "/email/resend",
    name: "verification.resend",
    component: page("auth/verification/resend.vue"),
  },

  { path: "/home", name: "home", redirect: { name: "homepage" } },
  { path: "/shop", name: "homepage", component: page("shop/homepage.vue") },
  {
    path: "/shop/details/:id",
    name: "products.detail",
    component: page("shop/productdetail.vue"),
  },
  {
    path: "/cart",
    name: "cart",
    component: page("shop/cart.vue"),
  },
  {
    path: "/payment",
    name: "payment",
    component: page("shop/payment.vue"),
  },
  {
    path: "/admin",
    name: " admindashboard",
    component: page("admin/admindashboard.vue"),
  },
  {
    path: "/admin/productinsert",
    name: "productinsert",
    component: page("admin/productinsert.vue"),
  },

  {
    path: "/settings",
    component: page("settings/index.vue"),
    children: [
      { path: "", redirect: { name: "settings.profile" } },
      {
        path: "profile",
        name: "settings.profile",
        component: page("settings/profile.vue"),
      },
      {
        path: "password",
        name: "settings.password",
        component: page("settings/password.vue"),
      },
    ],
  },

  { path: "*", component: page("errors/404.vue") },
];
