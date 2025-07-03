// Import Firebase SDK
importScripts(
    "https://www.gstatic.com/firebasejs/9.6.0/firebase-app-compat.js"
);
importScripts(
    "https://www.gstatic.com/firebasejs/9.6.0/firebase-messaging-compat.js"
);

// Firebase konfiguratsiyasi
const firebaseConfig = {
    apiKey: "AIzaSyB4yDFNi4Jd8b9YMTHqLEqFaO-Hma5_wEc",
    authDomain: "davaktivmi-fd913.firebaseapp.com",
    projectId: "davaktivmi-fd913",
    storageBucket: "davaktivmi-fd913.firebasestorage.app",
    messagingSenderId: "30996396175",
    appId: "1:30996396175:web:e48b7b13167bc11e7658fa",
    measurementId: "G-Q1XGDRH3CT",
};

firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    const notificationTitle = payload?.notification?.title || "Default Title";
    const notificationOptions = {
        body: payload?.notification?.body || "Default body message",
        icon: "/favicon.ico",
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
