/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

console.log('hello from bootstrap js file');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'MyCustomPusherKey',
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true,
    cluster: "mt1"
});

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });

/////////Public channel/////////////
window.Echo.channel(`new_user_channel`)
    .listen('.App\\Events\\NewUserRegisteredEvent', (e) => {
        console.log(e) ;
        $(" .notificationsIcon").load(" .notificationsIcon > *");
        $("#notificationModel").load("#notificationModel > *");
    });

/////////Model Broadcasting/////////////
// window.Echo.channel(`new_user_channel_from_model_broadcasting`)
//     .listen('.CustomUserCreated', (e) => {
//         console.log(e) ;
//         $(" .notificationsIcon").load(" .notificationsIcon > *");
//         $("#notificationModel").load("#notificationModel > *");
//     });



/////////private channel/////////////
// window.Echo.private(`new_user_channel`)
//     .listen('NewUserRegisteredEvent', (e) => {
//         console.log(e) ;
//         $(" .notificationsIcon").load(" .notificationsIcon > *");
//         $("#notificationModel").load("#notificationModel > *");
//     })
//     .listen('.App\\Events\\NewUserRegisteredEvent2', (e) => {
//     console.log(e) ;
// });


/////////presence channel/////////////
// window.Echo.join(`new_admin_channel`)
//     .here((users) => {
//         console.log('here: ')
//         console.log(users)
//         $.each(users, function(index,user){
//             $("#OnlineAdmins").append($("<li>").text(user.name));
//         })
//     })
//     .joining((user) => {
//         console.log('joining: ')
//         console.log(user)
//         $("#OnlineAdmins").append($("<li>").text(user.name));
//     })
//     .leaving((user) => {
//         console.log('leaving: ')
//         console.log(user)
//         $("#onlineAdmins li:contains('" + user.name + "')").remove();
//     })
//     .error((error) => {
//         console.log('error: ')
//         console.log(error)
//     });
