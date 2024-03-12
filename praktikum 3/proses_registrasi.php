<?php

// Check if the required fields are set in the $_POST array
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
$skills = isset($_POST['skill']) ? $_POST['skill'] : [];
$domisili = isset($_POST['domisili']) ? $_POST['domisili'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

// nilai skor
$skillsScores = [
    'html' => 10,
    'css' => 10,
    'javascript' => 20,
    'rwd boostrap' => 20,
    'php' => 30,
    'python' => 30,
    'java' => 50,
];

//total skor
$totalSkor = 0;
foreach ($skills as $selectedSkill) {
    if (isset($skillsScores[$selectedSkill])) {
        $totalSkor += $skillsScores[$selectedSkill];
    }
}

//kategori skill
$kategoriSkill = '';
if ($totalSkor <= 10) {
    $kategoriSkill = 'pemula';
} elseif ($totalSkor <= 30) {
    $kategoriSkill = 'menengah';
} else {
    $kategoriSkill = 'tinggi';
}

// tampilkan hasilnya
echo "NIM:  $nim";
echo "<br>Nama Lengkap:  $nama";
echo "<br>Gender:  $gender";
echo "<br>Prodi: $prodi";
echo "<br>Skill:  " . implode(', ', $skills);
echo "<br>Total Skor: $totalSkor";
echo "<br>Kategori Skill: $kategoriSkill";
echo "<br>Domisili: $domisili";
echo "<br>Email: $email";
