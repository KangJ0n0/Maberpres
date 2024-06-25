const { Sequelize, DataTypes } = require("sequelize");
const sequelize = require("./index");

const Student = sequelize.define(
  "Student",
  {
    name: {
      type: DataTypes.STRING,
      allowNull: false,
    },
    academicScore: {
      type: DataTypes.INTEGER,
      allowNull: false,
    },
    extracurricularScore: {
      type: DataTypes.INTEGER,
      allowNull: false,
    },
    personalQualityScore: {
      type: DataTypes.INTEGER,
      allowNull: false,
    },
  },
  {
    tableName: "students",
  }
);

Student.sync(); // Create table if it doesn't exist

module.exports = Student;
