# DNA Raw Data Formats Comparison

This document compares the main DNA raw data formats used by popular genetic testing services.

---

## Overview

Different DNA testing companies use different file structures for raw genetic data. This tool supports conversion between the most common formats.

---

## Format comparison table

| Feature / Format      | 23andMe            | AncestryDNA        | MyHeritage         | FamilyTreeDNA      |
|----------------------|--------------------|--------------------|--------------------|--------------------|
| File type            | TSV                | TSV                | CSV                | TSV                |
| rsid                 | Yes                | Yes                | Yes                | Yes                |
| chromosome           | Yes                | Yes                | Yes                | Yes                |
| position             | Yes                | Yes                | Yes                | Yes                |
| genotype format      | Single (AA, CT)    | Split (A + A)      | Single (AA, CT)    | Single (AA, CT)    |
| delimiter            | Tab                | Tab                | Comma              | Tab                |
| header row           | Optional           | Optional           | Usually present    | Optional           |

---

## Key differences

### 23andMe
- Simple format
- Genotype stored as one field
- Easy to parse

### AncestryDNA
- Uses split allele representation
- Slightly more structured format

### MyHeritage
- CSV-based format
- Includes header row
- Easier for spreadsheet tools

### FamilyTreeDNA
- Similar to 23andMe
- May differ in coverage and ordering

---

## Conversion compatibility

Most formats can be converted between each other with minimal data loss because they share core fields:

- rsid
- chromosome
- position
- genotype information

---

## Notes

- This comparison is based on common raw data export formats.
- Exact structure may vary slightly depending on file version or export settings.
