const express = require("express");
const router = express.Router();
const Student = require("../models/students");
const multer = require("multer");
const xlsx = require("xlsx");

// Configuring multer for file uploads
const upload = multer({ dest: "uploads/" });

// Home route
router.get("/", async (req, res) => {
  const students = await Student.findAll();
  res.render("index", { students });
});

// Route to add a new student
router.post("/add", async (req, res) => {
  const { name, academicScore, extracurricularScore, personalQualityScore } = req.body;
  const newStudent = await Student.create({ name, academicScore, extracurricularScore, personalQualityScore });
  res.redirect("/");
});

// Route to upload Excel file and extract data
router.post("/upload", upload.single("file"), (req, res) => {
  const file = xlsx.readFile(req.file.path);
  const sheet = file.Sheets[file.SheetNames[0]];
  const data = xlsx.utils.sheet_to_json(sheet);

  data.forEach(async (item) => {
    await Student.create({
      name: item.name,
      academicScore: item.academicScore,
      extracurricularScore: item.extracurricularScore,
      personalQualityScore: item.personalQualityScore,
    });
  });

  res.redirect("/");
});

module.exports = router;
