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

## Important notes

- No medical interpretation is performed
- Only format conversion is applied
- Data structure may vary slightly between providers
