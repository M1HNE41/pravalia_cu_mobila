<style>
        .istoric {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f6f6f6;
            color: #333;
            margin: 0;
            padding: 20px;
            background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
            animation: animate-bg 0.92s infinite linear;
        }
        @keyframes  animate-bg {
        	  100% {
        	    background-position: 50px 50px;
        	  }
        	}
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .history {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .history h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .history p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .history {
                padding: 20px;
            }
        }
    </style>