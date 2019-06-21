import React from "react";
import ReactDOM from "react-dom";
import App from "./App";
import io from "socket.io-client";

// const backendUrl = "https://0c04d624.ngrok.io";
//
// export const getQrCode = (socketName, query) => {
//     const socket = io(`${backendUrl}/${socketName}/`, {
//         forceNew: true,
//         query
//     });
//     return new Promise(resolve =>
//         socket.on("qrCode", ({ qrCode, identifier }) => resolve({ qrCode, socket, identifier }))
//     );
// };
//
// export const awaitStatus = ({ socket, identifier }) => {
//     return new Promise((resolve, reject) => {
//         socket.on(identifier, data => {
//             const parsedData = JSON.parse(data);
//             if (parsedData.status === "failure") {
//                 reject(parsedData);
//             } else {
//                 resolve(parsedData);
//             }
//         });
//     });
// };
//
// const f = async () => {
//     const { qrCode: ssoQrCode, socket, identifier } = await getQrCode("authenticate");
//
//     const img = document.getElementById("img");
//     img.src = ssoQrCode;
//
//     const response = await awaitStatus({ socket, identifier })

    ReactDOM.render(<App />, document.getElementById("root"));
// };
//
// f();
