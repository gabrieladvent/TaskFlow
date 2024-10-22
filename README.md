<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
    Hope the plan doesn't rot lmao :D
</p>

## About GeoExplorer

**GeoExplorer** is a geospatial platform that allows users to find hidden gems, monitor air quality, get earthquake predictions, and view weather conditions at the accessed location.

## Key Features

### 1. Hidden Gems by Location:

-   Displays a list of hidden gems around the user's location or selected city.

-   Users can view details about the attractions (address, photos, reviews) and information such as route, cost, best time to visit.
-   API used:
    -   Foursquare Places API
    -   TripAdvisor API

### 2. Air Pollution Tracking:

-   Displays real-time air quality (AQI) data based on the user's location.
-   Provides outdoor activity suggestions (for example, whether it is - safe to exercise outdoors based on air quality).
-   APIs used:
    -   World Air Quality Index API

### 3. Earthquake Prediction and Visualization:

-   Displays earthquakes occurring near the user's location or in the global region.
-   Users can view information such as magnitude, time, and depth of the earthquake.
-   Provides notification or early warning if there is a significant earthquake in a particular region.
-   API used:
    -   USGS Earthquake API

### 4. Real-Time Climate and Weather Information:

-   Displays current weather data at the user's location including temperature, humidity, wind speed, and forecasts for the next few days.
-   Provides activity recommendations based on the weather (for example: today is suitable for hiking or traveling).
-   API used:
    -   OpenWeatherMap API
    -   Climate Data API

## Technology Used

### 1. Backend: Laravel 10

-   Laravel will be responsible for handling API calls, authentication, and user data management.
-   Create service integration for each API (Foursquare, AQI, USGS, OpenWeather) inside Laravel, so that you can call APIs easily.

### 2. Frontend: Blade (Maybe if someone is willing to collaborate for the front end)

-   Use interactive maps (e.g. Leaflet.js or Google Maps API) to display hidden gems, earthquakes, and air quality based on the user's location.
-   Visual information such as AQI charts, weather prediction charts, or earthquake heatmaps can be displayed in chart form (e.g. using Chart.js).

### 3. Database:

-   Store user-generated content data such as hidden gems reviews, planned visits, or locations that have been visited by users.
-   Save favorite locations for automatic tracking of earthquakes or air quality.

### 4. Geolocation Integration:

-   Use the browser Geolocation API to retrieve the user's location and customize the content displayed (e.g. nearby hidden gems, air pollution data, weather, and earthquake predictions).

## License

The Project is open-sourced software licensed under the [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0).
