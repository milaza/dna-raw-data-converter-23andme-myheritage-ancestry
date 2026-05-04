# 23andMe Raw Data Format

23andMe provides raw genetic data in a tab-separated text file.

## Structure

Each line contains:

- rsid (variant ID)
- chromosome
- position
- genotype

### Example:

rs3094315  1  742429  AA  
rs12562034 1  758311  GG  
rs3934834  1  995669  CT  

---

## Notes

- Data is plain text
- Uses tab-separated values
- Genotype is stored as two-letter code

---

## Usage in converter

This format is used as input for DNA conversion into other formats such as AncestryDNA or MyHeritage.
