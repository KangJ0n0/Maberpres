const express = require("express");
const { PrismaClient } = require("@prisma/client");
const app = express();
const prisma = new PrismaClient();

app.use(express.json());

const calculateProfileScore = (user) => {
  const ktiScore = user.kti >= 5 ? 5 : user.kti > 0 ? 3 : 0;
  const biScore = user.bi >= 81 ? 5 : user.bi >= 51 ? 3 : 0;
  const ipkScore = user.ipk >= 3.51 ? 5 : user.ipk >= 3.01 ? 3 : 0;
  const prestasiScore = user.prestasi >= 6 ? 5 : user.prestasi > 0 ? 3 : 0;
  const poScore = user.po >= 2 ? 5 : user.po > 0 ? 3 : 0;
  const beasiswaScore = user.beasiswa >= 3 ? 5 : user.beasiswa > 0 ? 3 : 0;

  return (ktiScore + biScore + ipkScore + prestasiScore + poScore + beasiswaScore) / 6;
};

app.post("/user", async (req, res) => {
  const { name, kti, bi, ipk, prestasi, po, beasiswa } = req.body;
  const user = await prisma.user.create({
    data: { name, kti, bi, ipk, prestasi, po, beasiswa },
  });

  const score = calculateProfileScore(user);
  const profile = await prisma.profile.create({
    data: {
      userId: user.id,
      score,
    },
  });

  res.json({ user, profile });
});

app.get("/users", async (req, res) => {
  const users = await prisma.user.findMany({
    include: { profile: true },
  });
  res.json(users);
});

app.listen(3000, () => {
  console.log("Server is running on port 3000");
});
