# DNA Conversion Guide

This document explains how DNA raw data conversion works between different formats.

---

## Supported conversions

- 23andMe → AncestryDNA
- 23andMe → MyHeritage
- AncestryDNA → 23andMe
- MyHeritage → AncestryDNA

---

## How conversion works

The process involves:

1. Reading input DNA file
2. Parsing rsid, chromosome, position, genotype
3. Mapping genotype format differences
4. Exporting into target format

---

## Key differences between formats

- 23andMe: single genotype column
- AncestryDNA: split alleles (allele1 / allele2)
- MyHeritage: CSV format with RESULT field

---
## Related conversions

- [23andMe → AncestryDNA](23andme-to-ancestrydna.md)
- [AncestryDNA → 23andMe](ancestrydna-to-23andme.md)
- [MyHeritage → 23andMe](myheritage-to-23andme.md)
- [23andMe → MyHeritage](23andme-to-myheritage.md)

## Important notes

- No medical interpretation is performed

## Try online conversion

For automatic conversion without programming:

👉 https://tendna.com/
- Only format conversion is applied
- Data structure may vary slightly between providers
