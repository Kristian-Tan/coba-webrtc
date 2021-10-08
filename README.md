# COBA-WEBRTC

simple demo / proof of concept of working webrtc

## video-sender-receiver

### ABOUT
- there is two page: sender.html and receiver.html
- user who open sender.html will be broadcasting/streaming its media
- user who open receiver.html will be playing the broadcasted/streamed media
- no signalling server used, the two user must use other means of communication for signalling (recommended to be in same room and use third party chat software to send the signals) 

### USAGE
- open in separate tab (one tab opens sender.html, other tab opens receiver.html)
- go to tab sender.html, copy the ```offer``` (it should contains: ```{"sdp":"...", "type":"offer"}```)
- go to tab receiver.html, paste the ```offer```, then click ```offer```
- go to tab receiver.html, copy the ```answer``` (it should contains: ```{"type":"answer", "sdp": "..."}```)
- go to tab sender.html, paste the ```answer```, then click ```answer```
- go to tab sender.html, copy the ```candidate``` (it should contains: ```{"candidate":"...","sdpMid":"0","sdpMLineIndex":0}```)
- go to tab receiver.html, paste the ```candidate```, then click ```candidate```

### NOTES
- on most online tutorials, the signalling usually use websocket (or JS websocket library like ```socket.io```), the purpose of this demo is to show that the signalling can use any kind of method (e.g.: copy paste)
- it can be done on different computer connected to same LAN (since I have not tried using STUN/TURN)
- the code used is inspired/modified from https://codelabs.developers.google.com/codelabs/webrtc-web and its code sample github https://github.com/googlecodelabs/webrtc-web

### TO DO
- learn how to use and deploy STUN/TURN server (e.g.: use ```coturn``` in linux server)

