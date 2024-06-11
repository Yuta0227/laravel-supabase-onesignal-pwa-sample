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

importScripts("https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.sw.js");
window.OneSignalDeferred = window.OneSignalDeferred || [];
OneSignalDeferred.push(function(OneSignal) {
    OneSignal.init({
        appId: "f4c9c521-d72e-43d6-b5dc-d531a569077e",
        safari_web_id: "web.onesignal.auto.58e6e5b6-6735-4042-a066-08aa34a9c18a",
        notifyButton: {
            enable: true,
        },
    });
});