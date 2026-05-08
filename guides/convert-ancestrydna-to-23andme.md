# Convert AncestryDNA to 23andMe Format

This guide describes how to convert AncestryDNA raw data into a 23andMe-compatible format.

## Differences between formats
AncestryDNA and 23andMe use different data structures:
- AncestryDNA: CSV format
- 23andMe: TSV format

## Why conversion is needed
Direct upload is not possible because:
- Column structure differs
- Genetic marker formatting is not identical

## Conversion steps
- Parse raw AncestryDNA file
- Reformat genotype columns
- Align SNP structure with 23andMe format

## Online tool
https://tendna.com/en/dna-converter

## Important
This process does not change genetic data, only file structure.
