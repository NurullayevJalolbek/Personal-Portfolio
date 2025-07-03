// resources/js/firebase-messaging.js
import { initializeApp } from "firebase/app";
import { getMessaging, getToken } from "firebase/messaging";

const firebaseConfig = {
    apiKey: "AIzaSyB4yDFNi4Jd8b9YMTHqLEqFaO-Hma5_wEc",
    authDomain: "davaktivmi-fd913.firebaseapp.com",
    projectId: "davaktivmi-fd913",
    storageBucket: "davaktivmi-fd913.firebasestorage.app",
    messagingSenderId: "30996396175",
    appId: "1:30996396175:web:e48b7b13167bc11e7658fa",
    measurementId: "G-Q1XGDRH3CT",
};

const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);
const VAPID_KEY =
    "BH0GhQVdOiZqynQYLn5_Of1RZ50o2JhrdJa9zFrO9BJTcLNTZ9tKnpbxHNUhDPto0u4ucIZlm2xC_WSiDpKZNYc";
const DEVICE_TOKEN = localStorage.getItem("firebase_token");

function saveTokenToServer(token) {
    //   fetch('/save-token', {
    //     method: 'POST',
    //     headers: {
    //       'Content-Type': 'application/json',
    //       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //     },
    //     body: JSON.stringify({ token })
    //   }).then(response => response.json())
    //     .then(data => console.log('Token saqlandi:', data))
    //     .catch(error => console.error('Tokenni saqlashda xatolik:', error));
    localStorage.setItem("firebase_token", token);
    // const domain = window.location.origin;
    // $.ajax({
    //     url: domain + "/api/profile/device",
    //     type: "PUT",
    //     dataType: "json",
    //     processData: false,
    //     contentType: false,
    //     data: { device_token: token },
    //     success: function (data) {
    //         sweetSuccess("", data.result);
    //         // setTimeout(() => {
    //         //     location.reload();
    //         // }, 1000);
    //     },
    //     error: function (data) {
    //         data = JSON.parse(data.responseText);
    //         sweetError("", data.errors);
    //     },
    // });
}

function requestPermissionAndGetToken() {
    Notification.requestPermission().then((permission) => {
        if (permission === "granted") {
            getToken(messaging, { vapidKey: VAPID_KEY })
                .then((currentToken) => {
                    if (currentToken) {
                        saveTokenToServer(currentToken);
                    } else {
                        console.log("Token olinmadi.");
                    }
                })
                .catch((err) => {
                    console.log("Token olishda xatolik:", err);
                });
        } else {
            console.log("Ruxsat berilmadi.");
        }
    });
}

// if (!DEVICE_TOKEN?.length) {
requestPermissionAndGetToken();
// }
