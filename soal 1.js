function myBiodata(biodata){
  let biodataObj = {
    "name": 'Andriyanto',
    "address": 'Jl.Masjid Babul Jannah Bicorong Pakong Pamekasan ',
    "hobbies": [
      'Baca Buku', 'Browsing Malam', 'Game', 'Ngopi' 
    ],
    "is_married": false,
    "school": {
      "highSchool": 'SMK Matsaratul Huda',
      "university": '-'
    },
    "skill": [
      {
        "java": "50 %","Office": "60 %","Web php": "20 %",
      }
    ]
  }

  return biodataObj
}
console.log(myBiodata('andre'));