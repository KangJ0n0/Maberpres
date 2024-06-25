const express = require("express");
const bodyParser = require("body-parser");
const path = require("path");
const sequelize = require("./models/index");

const app = express();

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, "public")));
app.set("view engine", "ejs");

// Routes
const indexRouter = require("./routes/index");
app.use("/", indexRouter);

// Start the server
const PORT = process.env.PORT || 3000;
sequelize.sync().then(() => {
  app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
  });
});
