## 🌐 Online DNA Converter (No coding required)

If you just want to convert DNA files without using PHP or command line:

👉 [https://tendna.com/](https://tendna.com/en/dna-converter)

Upload your file and get instant conversion between:
- 23andMe
- AncestryDNA
- MyHeritage
- FamilyTreeDNA
- 
# DNA File Converter (23andMe → AncestryDNA / MyHeritage / FamilyTreeDNA)

This project is a PHP tool for converting raw DNA data files between different genetic testing formats.

It allows users to transform DNA files exported from services like 23andMe into formats compatible with other platforms such as AncestryDNA and MyHeritage.

---

## Supported formats

- 23andMe
- AncestryDNA
- MyHeritage
- FamilyTreeDNA 
---

## How to use

Run the converter from command line:

```bash
php converter/convert.php input.txt output.txt target_format

Example:

php converter/DNA-converter.php examples/sample_23andme.txt output.txt ancestrydna
Example files

Folder /examples contains sample files:

sample_23andme.txt
samзle_AncestryDNA.txt
sample_MyHeritage.csv
sample_FamilyTreeDNA.csv

## Guides

- Convert DNA formats
- Upload raw DNA data
- Understand file structures

See /guides for full documentation.

Important note

This tool works only with raw DNA data files.
It does NOT provide medical diagnosis or health advice.

License
MIT
