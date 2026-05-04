# AncestryDNA Raw Data Format

AncestryDNA uses a structured tab-separated format with separated alleles.

## Structure

Each record contains:

- rsid
- chromosome
- position
- allele1
- allele2

### Example:

rs3094315  1  742429  A  A  
rs12562034 1  758311  G  G  
rs3934834  1  995669  C  T  

---

## Notes

- Genotype is split into two columns
- Data is tab-separated
- Format differs from 23andMe

---

## Conversion

This format is used as target output in DNA conversion tools.
