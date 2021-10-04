<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="remove">remove</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.22.0/axios.min.js"></script>
    <script>
        /**
         * response statuses:
         *  200
         *  500
         *  419
         */
        document.getElementById("remove").addEventListener("click", function() {
            call()
        })

        async function call() {
            try {
                let data = {
                    id : 223
                }

                let dt = new FormData()
                dt.append('id' , 2654)
                let res = await axios.post('remove.php' , data)
                console.log(res.data)
            } catch (error) {
                console.log(error)
            }
        }
    </script>
</body>

</html>