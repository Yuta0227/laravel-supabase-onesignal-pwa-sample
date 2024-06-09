import "./bootstrap";
import { registerSW } from "virtual:pwa-register";
registerSW({
    onRegistered(r) {
        console.log("SW Registered", r);
    },
    onRegisterError(e) {
        console.log("SW Register Error", e);
    },
});
