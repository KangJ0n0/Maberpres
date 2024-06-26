const express = require("express");
const { createServer } = require("http");
const { parse } = require("url");
const mysql = require("mysql");

const app = express();
const server = createServer((req, res) => {
  const parsedUrl = parse(req.url, true);
  app(req, res, parsedUrl);
});

// Your MySQL configuration
const db = mysql.createConnection({
  host: "your-mysql-host",
  user: "your-mysql-user",
  password: "your-mysql-password",
  database: "your-database-name",
});

db.connect((err) => {
  if (err) throw err;
  console.log("Connected to MySQL Database");
});

// Define your routes
app.get("/api", (req, res) => {
  res.send("Hello from Express.js!");
});

module.exports = server;
