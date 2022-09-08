<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
const getLocation = () => new Promise(
  (resolve, reject) => {
    window.navigator.geolocation.getCurrentPosition(
      position => {
        const location = {
          lat:position.coords.latitude,
          long:position.coords.longitude
        };
        resolve(location); 
      },
      err => reject(err) 
    );
  }
);
getLocation()
    .then(location => console.log(location))
    .catch(error => console.log(error));
</script>

</body>
</html>