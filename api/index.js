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
  host: "localhost",
  user: "root",
  password: "your-mysql-password",
  database: "maberpres",
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
