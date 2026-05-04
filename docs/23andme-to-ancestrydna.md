# Convert 23andMe to AncestryDNA Format

23andMe raw DNA data can be converted to AncestryDNA format by transforming genotype representation and adjusting file structure.

## Key changes:
- single genotype → allele1 + allele2
- TSV → TSV (same delimiter, different structure)
- column reordering required

## Result
A compatible AncestryDNA-style raw data file suitable for genealogy tools.

## Related pages

- See supported formats: [DNA File Converter Tool](dna-file-converter-tool.md)
- Learn differences: [DNA Format Differences](dna-file-formats-differences.md)
- Full guide: [Conversion Guide](conversion-guide.md)
