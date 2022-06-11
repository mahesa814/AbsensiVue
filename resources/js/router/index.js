import Home from "../views/Home";
import About from "../views/About";
import CreateKariyawan from "../views/kariyawans/create";

export default {
    mode: "history",
    linkActiveClass: "shadow-lg px-5 py-2 bg-body rounded text-left",
    routes: [
        {
            path: "/",
            name: "pages.home",
            component: Home,
        },

        {
            path: "/About",
            name: "pages.about",
            component: About,
        },
        {
            path: "/kariyawans/create",
            name: "kariyawans.create",
            component: CreateKariyawan,
        },
    ],
};
