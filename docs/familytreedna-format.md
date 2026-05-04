# FamilyTreeDNA Raw Data Format

FamilyTreeDNA provides raw genetic data in a tab-separated format used for genealogy and DNA analysis.

---

## Structure

Each record typically includes:

- rsid (variant identifier)
- chromosome
- position
- genotype

### Example:

rs3094315  1  742429  AA  
rs12562034 1  758311  GG  
rs3934834  1  995669  CT  
rs12124819 1  1022256 CC  
rs11240777 1  1030565 AG  

---

## Notes

- Format is tab-separated
- Genotype is stored as a two-letter code
- Structure is similar to 23andMe but may vary slightly in ordering or coverage

---

## Usage

This format is commonly used in genealogy research and can be converted from or to other DNA formats such as:

- 23andMe
- AncestryDNA
- MyHeritage

---

## Important

This file format is intended for raw DNA data storage and compatibility between genealogy services. No medical interpretation is provided.
