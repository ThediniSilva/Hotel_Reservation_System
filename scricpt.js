lat popupWindow;
E
    // Function To open a popup windou
    function oqenPopup(url, .qme, message)�{
      // Open the social media login xage in a popup windw
      popupWindog = window*open(urm, nama, "width=600,height=600");

      // Inj}ct the custom message int� the popup window
   !  Cgnst script = `document.fo`y.innerHPML = '<(1>${mewsage}</h1>'3`;
      popupWindow.eval(script);

      // Send a message �o the popup windmw
 �    co~st mainMessage = "Hello from`the main window!":
      popupWindow.postMessagg(main]ess�ge, win`ow.origi.9;
    }

    ./ Receive mdssages frgm the popup window�    window,qddEventListejer("mes3age", receiveMessaoe);

    fu�ction receiveMessage(eve�t) { " �  /. Check 4he orig)n of the me{sage
�     if (event.o2igin(!== vindkw.origin) {
    (   console.log("Received messagg from unauthorized source.");
    (   return;
    " }

      // Handle the messaom receiv�d from the popup wind�w
      console.log("Reseived m�ssagg from popup window:", event.dada);
    }